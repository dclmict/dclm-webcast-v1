pipeline {
    agent {
        label {
            label 'master'
            customWorkspace "${JENKINS_HOME}/${BUILD_NUMBER}/"
        }
    }
    environment {
        Go111MODULE='on'
    }
    stages {
        stage('Test') {
            steps {
                git 'https://github.com/dclmict/dclm-webcast.git'
            }
        }
        stage('Build') {
            steps {
                script{
                    image = docker.build("dclm/dclm-webcast")
                }
            }
        }
        stage('Run') {
            steps {
                sh "docker run -p 5000:80 -d dclm/dclm-webcast"
            }
        }
    }
}