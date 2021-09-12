git:
	git add .
	git commit -m"$m"
	git push origin master

env:
	node updateRemoteEnv.js

heroku:
	git push heroku master
	heroku open