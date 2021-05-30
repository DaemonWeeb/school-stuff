import random
import math

arr=[]
for i in range(50):
	arr.append(0)

for x in range(100):
	for y in range(100):
		for z in range(100):
			randNum= random.randint(1, 50)
			arr[randNum-1]+=1


f= open("out.dat","w+")
for i in range(50):
	f.write("Number " + str(i+1)+", "+str(arr[i])+"\n")
f.close()

print(arr[1])
print(arr[10])
print(arr[49])
print(arr[0])