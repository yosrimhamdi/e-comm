git:
	git add .
	git commit -m"$m"
	git push origin master

env:
	node updateRemoteEnv.js
	$(MAKE) open

heroku:
	git push heroku master
	$(MAKE) open

open:
	heroku open

both:
	$(MAKE) git
	$(MAKE) heroku
