# -- coding: UTF-8 --

import codecs
from urllib.request import urlopen
import mysql.connector
#load all disciplines from Jupiter web

date = urlopen("https://uspdigital.usp.br/jupiterweb/jupDisciplinaLista?codcg=55&tipo=D").read()

date = str(date)
#Parsing date to get discipline name
tableBuff=date.split('<TABLE align="center">')
table = tableBuff[1].split("</TABLE>")
rowInTable = table[0].split('<TR>')
db = mysql.connector.connect(user="root",password="",host="localhost",database="mydb")
cur = db.cursor()
for row in rowInTable:
	try:
		buff=row.split('</span></font></TD>');
		row=buff[0];
		buff=row.split('<span class="txt_arial_8pt_gray">')
		discipline = buff[1];
		discipline = discipline.strip("\\r\\n")
		discipline=discipline.strip()
		print(discipline)
		disciplineInfo = urlopen("https://uspdigital.usp.br/jupiterweb/obterTurma?sgldis="+discipline).read()
		
		disciplineInfo = disciplineInfo = disciplineInfo.decode('iso-8859-1')
		disciplineInfo = str(disciplineInfo)
		

		
		if(disciplineInfo.find("o existe oferecimento para a sigla")>1):
			print("nao existe oferecimento para disciplina "+discipline)
		else:
			#parse discipline information
			disciplineName=""
			index = disciplineInfo.find(discipline+ " - ");
			while(disciplineInfo[index]!="<"):
				disciplineName = disciplineName+disciplineInfo[index]
				index=index+1;
			disciplineName = disciplineName.replace(discipline+" - ","")
			
			print(disciplineName)
			disciplineTeacher = disciplineInfo.split("Prof(a)")
			disciplineTeacher = disciplineTeacher[1]
			disciplineTeacher = disciplineTeacher.split("</td>")
			disciplineTeacher = disciplineTeacher[4]
			disciplineTeacher = disciplineTeacher.replace('<td > <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666"><span class="txt_arial_8pt_gray">',"")
			disciplineTeacher = disciplineTeacher.replace("</span> </font>","")
			disciplineTeacher = disciplineTeacher.strip()
			print(disciplineTeacher)	
			query = 'SELECT count(*) FROM teacher where name="'+disciplineTeacher+'"'
			
			cur.execute(query)
			result=cur.fetchone()
			
			if(result[0]==0):
				
				query = 'insert into teacher(name) values("'+disciplineTeacher+'")'
				
				cur.execute(query)
				db.commit()
			
			
			query = 'SELECT nusp FROM teacher where name="'+disciplineTeacher+'"'
			print(query)
			cur.execute(query)
			
			nusp=cur.fetchone()
			print(nusp[0])
			query = 'insert into discipline(code,name,department,teacher_nusp) values("'+discipline+'","'+disciplineName+'","'+discipline[0]+discipline[1]+discipline[2]+'","'+str(nusp[0])+'")'
			print(query)
			cur.execute(query)
			
			

		
	except:
        
		print("error")

db.commit()


# segunda parte



date = urlopen("https://uspdigital.usp.br/jupiterweb/jupDisciplinaLista?codcg=55&letra=I-P&tipo=D").read()

date = str(date)
#Parsing date to get discipline name
tableBuff=date.split('<TABLE align="center">')
table = tableBuff[1].split("</TABLE>")
rowInTable = table[0].split('<TR>')
db = mysql.connector.connect(user="root",password="",host="localhost",database="mydb")
cur = db.cursor()
for row in rowInTable:
	try:
		buff=row.split('</span></font></TD>');
		row=buff[0];
		buff=row.split('<span class="txt_arial_8pt_gray">')
		discipline = buff[1];
		discipline = discipline.strip("\\r\\n")
		discipline=discipline.strip()
		print(discipline)
		disciplineInfo = urlopen("https://uspdigital.usp.br/jupiterweb/obterTurma?sgldis="+discipline).read()
		
		disciplineInfo = disciplineInfo = disciplineInfo.decode('iso-8859-1')
		disciplineInfo = str(disciplineInfo)
		

		
		if(disciplineInfo.find("o existe oferecimento para a sigla")>1):
			print("nao existe oferecimento para disciplina "+discipline)
		else:
			#parse discipline information
			disciplineName=""
			index = disciplineInfo.find(discipline+ " - ");
			while(disciplineInfo[index]!="<"):
				disciplineName = disciplineName+disciplineInfo[index]
				index=index+1;
			disciplineName = disciplineName.replace(discipline+" - ","")
			
			print(disciplineName)
			disciplineTeacher = disciplineInfo.split("Prof(a)")
			disciplineTeacher = disciplineTeacher[1]
			disciplineTeacher = disciplineTeacher.split("</td>")
			disciplineTeacher = disciplineTeacher[4]
			disciplineTeacher = disciplineTeacher.replace('<td > <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666"><span class="txt_arial_8pt_gray">',"")
			disciplineTeacher = disciplineTeacher.replace("</span> </font>","")
			disciplineTeacher = disciplineTeacher.strip()
			print(disciplineTeacher)	
			query = 'SELECT count(*) FROM teacher where name="'+disciplineTeacher+'"'
			
			cur.execute(query)
			result=cur.fetchone()
			
			if(result[0]==0):
				
				query = 'insert into teacher(name) values("'+disciplineTeacher+'")'
				
				cur.execute(query)
				db.commit()
			
			
			query = 'SELECT nusp FROM teacher where name="'+disciplineTeacher+'"'
			print(query)
			cur.execute(query)
			
			nusp=cur.fetchone()
			print(nusp[0])
			query = 'insert into discipline(code,name,department,teacher_nusp) values("'+discipline+'","'+disciplineName+'","'+discipline[0]+discipline[1]+discipline[2]+'","'+str(nusp[0])+'")'
			print(query)
			cur.execute(query)
			
			

		
	except:
		print("error")

db.commit()
#pt3
date = urlopen("https://uspdigital.usp.br/jupiterweb/jupDisciplinaLista?codcg=55&letra=R-V&tipo=D").read()

date = str(date)
#Parsing date to get discipline name
tableBuff=date.split('<TABLE align="center">')
table = tableBuff[1].split("</TABLE>")
rowInTable = table[0].split('<TR>')
db = mysql.connector.connect(user="root",password="",host="localhost",database="mydb")
cur = db.cursor()
for row in rowInTable:
	try:
		buff=row.split('</span></font></TD>');
		row=buff[0];
		buff=row.split('<span class="txt_arial_8pt_gray">')
		discipline = buff[1];
		discipline = discipline.strip("\\r\\n")
		discipline=discipline.strip()
		print(discipline)
		disciplineInfo = urlopen("https://uspdigital.usp.br/jupiterweb/obterTurma?sgldis="+discipline).read()
		
		disciplineInfo = disciplineInfo = disciplineInfo.decode('iso-8859-1')
		disciplineInfo = str(disciplineInfo)
		

		
		if(disciplineInfo.find("o existe oferecimento para a sigla")>1):
			print("nao existe oferecimento para disciplina "+discipline)
		else:
			#parse discipline information
			disciplineName=""
			index = disciplineInfo.find(discipline+ " - ");
			while(disciplineInfo[index]!="<"):
				disciplineName = disciplineName+disciplineInfo[index]
				index=index+1;
			disciplineName = disciplineName.replace(discipline+" - ","")
			
			print(disciplineName)
			disciplineTeacher = disciplineInfo.split("Prof(a)")
			disciplineTeacher = disciplineTeacher[1]
			disciplineTeacher = disciplineTeacher.split("</td>")
			disciplineTeacher = disciplineTeacher[4]
			disciplineTeacher = disciplineTeacher.replace('<td > <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666"><span class="txt_arial_8pt_gray">',"")
			disciplineTeacher = disciplineTeacher.replace("</span> </font>","")
			disciplineTeacher = disciplineTeacher.strip()
			print(disciplineTeacher)	
			query = 'SELECT count(*) FROM teacher where name="'+disciplineTeacher+'"'
			
			cur.execute(query)
			result=cur.fetchone()
			
			if(result[0]==0):
				
				query = 'insert into teacher(name) values("'+disciplineTeacher+'")'
				
				cur.execute(query)
				db.commit()
			
			
			query = 'SELECT nusp FROM teacher where name="'+disciplineTeacher+'"'
			print(query)
			cur.execute(query)
			
			nusp=cur.fetchone()
			print(nusp[0])
			query = 'insert into discipline(code,name,department,teacher_nusp) values("'+discipline+'","'+disciplineName+'","'+discipline[0]+discipline[1]+discipline[2]+'","'+str(nusp[0])+'")'
			print(query)
			cur.execute(query)
			
			

		
	except:
		print("error")

db.commit()




