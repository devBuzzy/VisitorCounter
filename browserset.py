#! /usr/bin/python             

import sys

file_to_use = str(sys.argv[1])

try:
    file_in = open(file_to_use, "r")
    count = int(file_in.readline())    
    file_in.close()                     
except:
    open(file_to_use, "w").write("0")   
    open(file_to_use, "r").close()     
    count = 0     

file_out = open(file_to_use, "w")
count += 1
file_out.write(str(count))
