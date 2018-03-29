import datetime
import time
import weather_monitoring_system


def read_file(l): 
   f=open('log.txt',"r")
   lineList=f.readlines()
   f.close()
   k=str(lineList[-l])
   parts=k.split(" ")
   device=parts[0]
   attribute=parts[1]
   value=parts[2]
   return (device,attribute,value)




def time_stamp():
    ts = time.time()
    st = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
    return st

def inser(a,b,c,d):
    db=MySQLdb.connect(host="localhost",user="root",passwd="",db="weather_monitoring_system")
    cursor=db.cursor()
    query=" update shortlist set value=c, timestamp=d where device=a and attribute=b "
    cursor.execute(query)
    db.commit()
    db.close()
    return

