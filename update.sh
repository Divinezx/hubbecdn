rm -f .git/.MERGE_MSG.swp
git add .
git commit -m "Forced update"
git fetch origin main
git merge -s recursive -X theirs origin/main
git push

