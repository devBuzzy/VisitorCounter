#! /usr/bin/python             

try:
    file_in = open("count.txt", "r")
    count = int(file_in.readline())    
    file_in.close()                     
except:
    open("count.txt", "w").write("0")   
    open("count.txt", "r").close()     
    count = 0     

file_out = open("count.txt", "w")
count += 1
file_out.write(str(count))
