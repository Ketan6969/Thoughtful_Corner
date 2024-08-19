pipeline{
    agent any
    environment{
        DOCKER_CREDENTIAL_ID="docker-hub-creds"
        DOCKER_REGISTRY='docker.io'
        DOCKER_IMAGE="ketan2004/thcorner"
        SERVER_IP="34.234.138.153"
        SERVER_USER="ubuntu"

    }
    stages{
        stage('Checkout'){
            steps{
                echo "Fetching code form Github..."
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], userRemoteConfigs: [[url: 'https://github.com/Ketan6969/Thoughtful_Corner.git']]])
            }
        }

        stage('DockerBuild'){
            steps{
                script{
                    echo "Building the Docker Image...."
                    docker.build("$DOCKER_IMAGE:latest")
                    echo "Image Built!!"
                }
            }
        }
        stage('DockerPush'){
            steps{
                script{
                    echo "Executing the docker push stage!!!"
                    withCredentials([usernamePassword(credentialId: "${DOCKER_CREDENTIAL_ID}" , usernameVariable: 'USERNAME', passwordVariable: 'PASSWORD')]) {
                        sh '''
                            echo "$PASSWORD" | docker login -u "$USERNAME" --password-stdin
                            docker push ${DOCKER_IMAGE}:latest
                        '''
                    }
                    echo "Docker Push completed!!"
                }
            }
        }

        stage("Deploy"){
            steps{
                script{
                    echo "Deploying the application....."
                    withCredentials([sshUserPrivateKey(credentialsId: "aws-creds", keyFileVariable: 'SSH_KEY')]){
                        sh '''
                            ssh -i $SSH_KEY -o strictHostKeyChecking=no ${SERVER_USER}@${SERVER_IP} "
                                docker pull ${DOCKER_IMAGE}:latest
                                docker-compose down || true 
                                docker rm thcorner-container || true
                                docker-compose up
                                "
                        '''
                }
                echo "Deployment Complete!!"
            }
        }
    }
}
post{
    always{
        cleanWs()
    }
}
}