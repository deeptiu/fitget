import xml.etree.ElementTree as ET

#CHANGE THIS PATH BEFORE RUNNING
tree=ET.parse("/Users/godsrockgirl777/Desktop/Rutgerzzzzz/S18/Software Engineering/Fitget/export.xml")
root=tree.getroot()
heartRate=[]
steps=[]
#types=[]

#with the schema "year month day hour minute second value unit"
with open("data.txt",'w') as f:
	for child in root:
		if 'type' in child.attrib.keys():
			#if child.attrib['type'] not in types:
				#types.append(child.attrib['type'])
			if 'heartrate' in child.attrib['type'].lower():
				f.write("heartRate\t")
				for pair in child.attrib.items():
					if "startDate" ==pair[0]:
						#year, month, day
						date=pair[1].split()[0].split("-")
						f.write(date[0]+"\t"+date[1]+"\t"+date[2]+"\t")
						#hour, minute, second
						time=pair[1].split()[1].split(":")
						f.write(time[0]+"\t"+time[1]+"\t"+time[2]+"\t")
					elif 'value'==pair[0]:
						f.write(pair[1]+"\t")
					elif 'unit'==pair[0]:
						f.write(pair[1]+"\t")
				f.write("\n")
			elif 'step' in child.attrib['type'].lower():
				f.write("steps\t")
				for pair in child.attrib.items():
					if "startDate" ==pair[0]:
						#year, month, day
						date=pair[1].split()[0].split("-")
						f.write(date[0]+"\t"+date[1]+"\t"+date[2]+"\t")
						#hour, minute, second
						time=pair[1].split()[1].split(":")
						f.write(time[0]+"\t"+time[1]+"\t"+time[2]+"\t")
					elif 'value'==pair[0]:
						f.write(pair[1]+"\t")
					elif 'unit'==pair[0]:
						f.write(pair[1]+"\t")
				f.write("\n")
#print types