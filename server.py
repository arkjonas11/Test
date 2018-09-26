import socket
from time import ctime
import mysql.connector
import os
import subprocess


server_host = "localhost"
tcp_port = 8888

try:
    db = mysql.connector.connect(user='server', password='sonickool7', host='localhost', database='sercer_users')
    cursor = db.cursor()
except:
    print("Error connectig to Database.")
    quit()
    
try: 
    tcp_server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

except socket.error as err:
    print("Error creating socket: %s" %err)
    quit()

try:
    tcp_server.bind((server_host, tcp_port))
except socket.error as err:
    print("Error bindig: %s" %err)
    
tcp_server.listen(1)

print("       ________________________")
print("")
print("           SERVER STARTED")             
print("       ________________________")

while True: 
    client, addr = tcp_server.accept()
    print(ctime(), "-- Client connected from:", addr)
    
    while True:
        data = client.recv(1024)
        print(data.decode("utf-8"))
        command = data.decode("utf-8")
        command.split(" ") 
        a = command.split(" ")
        print(a)
        pro = subprocess.Popen(a , stdout=subprocess.PIPE, stderr=None, shell=True)
        process = subprocess.Popen("cd", stdout=subprocess.PIPE, stderr=None, shell=True)
        output = str(pro.communicate())
        print(output)
        client.send(output.encode("ascii"))  
        print("orion->")


