## clone instructions

$ git config --global user\.name github-username

$ git config --global user\.email github-email

$ cd /c/xampp/htdocs

$ git clone https://github.com/GeorgeMitrakis/eam-oasa.git

### To avoid retyping git credentials, do the following:

$ nano ~/.netrc

machine github.com

login github-username

password github-password

Ctrl+O -> yes -> Ctrl+X