#!/bin/bash

for i in *.md
do
	file_name=${i%.*}
	markdown "${file_name}.md" > "${file_name}.php"
done
