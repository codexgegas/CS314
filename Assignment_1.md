Experiment:1				ER DIAGRAM 

The Prescriptions-R-X chain of pharmacies has offered to give you a Free lifetime supply of medicines if you design its database. Given the rising cost of health care, you agree. 
Here's the information that you gather:
•	Patients are identified by an SSN, and their names, addresses, and ages must be recorded.
•	Doctors are identified by an SSN. For each doctor, the name, specialty, and years of experience must be recorded.
•	Each pharmaceutical company is identified by name and has a phone number. For each drug, the trade name and formula must be recorded. 
•	Each drug is sold by a given pharmaceutical company, and the trade name identifies a drug uniquely from among the products of that company. If a pharmaceutical company is deleted, you need not keep track of its products any longer.
•	Each pharmacy has a name, address, and phone number.
•	Every patient has a primary physician. Every doctor has at least one patient.
•	Each pharmacy sells several drugs and has a price for each. A drug could be sold at several pharmacies, and the price could vary from one pharmacy to another.
•	Doctors prescribe drugs for patients. A doctor could prescribe one or more drugs for several patients, and a patient could obtain prescriptions from several doctors.
•	Each prescription has a date and a quantity associated with it. You can assume that if a doctor prescribes the same drug for the same patient more than once, only the last such prescription needs to be stored.
•	Pharmaceutical companies have long-term contracts with pharmacies. A pharmaceutical company can contract with several pharmacies, and a pharmacy can contract with several pharmaceutical companies. For each contract, you have to store a start date, an end date, and the text of the contract.
•	Pharmacies appoint a supervisor for each contract. There must always be a supervisor for each contract, but the contract supervisor can change over the lifetime of the contract.
•	Draw an ER diagram that captures the above information. Identify any constraints that are not captured by the ER diagram.
 
![assignment_1_ER](https://user-images.githubusercontent.com/51349461/130429806-9d002f03-bc2f-4cc4-bb4d-459605b656ce.png)


Here are some of the relations:
 • Doctor(ssn,name,specialty,years_exp); Primary key = ssn 

 • Pharmacy(name,address,phone_number); primary key = name

