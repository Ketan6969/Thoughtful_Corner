pipeline{
    agent {
        node{
            label 'thcorner-node'
        }
    }
    environment{
        DOCKER_CREDENTIAL_ID="docker-hub-creds"
        DOCKER_REGISTRY='docker.io'
        DOCKER_IMAGE="ketan2004/thcorner"
        SERVER_IP="34.234.138.153"
        SERVER_USER="ubuntu"
        // DOCKER_COMPOSE_PATH = '/usr/bin/docker-compose'
    }
    stages{
        stage('Checkout'){
            steps{
                echo "Fetching code from Github..."
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], userRemoteConfigs: [[url: 'https://github.com/Ketan6969/Thoughtful_Corner.git']]])
            }
        }

            stage('Dockerbuild'){
                steps{
                script{
                    
                    sh 'pwd'
                    echo "Building the Docker Image...."
                    docker.build("$DOCKER_IMAGE:latest")
                    echo "Image Built!!"
                }
            }
        }
        
        stage('Dockerpush'){
            steps{
                script{
                    echo "Executing the docker push stage!!!"
                    withCredentials([usernamePassword(credentialsId: "${DOCKER_CREDENTIAL_ID}", usernameVariable: 'USERNAME', passwordVariable: 'PASSWORD')]) {
                        sh '''
                    
                            echo "$PASSWORD" | docker login -u "$USERNAME" --password-stdin
                            docker push ${DOCKER_IMAGE}:latest
                        '''
                    }
                    echo "Docker Push completed!!"
                }
            }
        }

        stage('Deploy'){
            steps{
                script{
                    echo "Deploying the application....."
                    pwd                    
                        sh '''
                            ssh -i ${SERVER_USER}@${SERVER_IP} "
                                docker pull ${DOCKER_IMAGE}:latest
                                pwd
                                ls
                                echo "current dir"
                                docker-compose down || true 
                                docker rm thcorner-container || true
                                docker-compose up -d
                            "
                        '''
                    
                    echo "Deployment Complete!!"
                }
            }
        }
    }
    post {
        always {
            cleanWs()
        }
    }
}