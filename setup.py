import sys
import os
import string
import pprint

base = os.getcwd()

module = dict()
module['MODULE_NAME_DISPLAY'] = raw_input("Module Name: ")
module['MODULE_NAME_LOWER'] = module['MODULE_NAME_DISPLAY'].replace(" ", "_").lower()
module['MODULE_NAME_UPPER'] = module['MODULE_NAME_LOWER'].upper()
module['MODULE_NAME_EE'] = module['MODULE_NAME_LOWER'].capitalize()

pprint.pprint(module)

for root, dirs, files in os.walk(base):
	os.chdir(root)
	for filename in files:
	    if filename.endswith(".php"):
			fileparts = filename.split(".", 2)
			
			if fileparts[1] != "module-name":
				continue
			
			new_filename = fileparts[0] + "." + module['MODULE_NAME_LOWER'] + "." + fileparts[2]
			
			if filename == new_filename:
				continue
			
			with open(new_filename, "wt") as fout:
				with open(filename, "rt") as fin:
					for line in fin:
						for k, v in module.items():
							line = line.replace(k, v)
						fout.write(line)
			os.remove(filename)
			
			continue
os.chdir(base)
os.remove("setup.py")
os.remove("README.md")
