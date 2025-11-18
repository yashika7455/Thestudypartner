pipeline {
    agent any

    environment {
        DOCKERHUB_REPO = 'yashikaa1/studypartner'
        IMAGE_TAG      = "build-${env.BUILD_NUMBER}"
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build Docker image') {
            steps {
                sh '''
                  echo "Building Docker image..."
                  docker build -t $DOCKERHUB_REPO:$IMAGE_TAG -t $DOCKERHUB_REPO:latest .
                '''
            }
        }

        stage('Login & Push to Docker Hub') {
            steps {
                withCredentials([usernamePassword(
                    credentialsId: 'dockerhub-creds',
                    usernameVariable: 'DOCKER_USER',
                    passwordVariable: 'DOCKER_PASS'
                )]) {
                    sh '''
                      echo "$DOCKER_PASS" | docker login -u "$DOCKER_USER" --password-stdin
                      docker push $DOCKERHUB_REPO:$IMAGE_TAG
                      docker push $DOCKERHUB_REPO:latest
                    '''
                }
            }
        }

    stage('Deploy to Kubernetes') {
        steps {
            sh '''
              echo "Ensuring Minikube is running..."
              # If minikube is not running, start it
              minikube status || minikube start --driver=docker

              echo "Deploying to Kubernetes..."
              kubectl --kubeconfig=/var/lib/jenkins/.kube/config apply --validate=false -f k8s/deployment.yaml
              kubectl --kubeconfig=/var/lib/jenkins/.kube/config apply --validate=false -f k8s/service.yaml

              echo "Waiting for rollout..."
              kubectl --kubeconfig=/var/lib/jenkins/.kube/config rollout status deployment/studypartner-deployment
            '''
        }
    }
 }
    post {
        always {
            sh 'docker logout || true'
        }
    }
}

