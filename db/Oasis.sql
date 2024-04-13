Drop database if exists Oasis;
create database Oasis;
use Oasis;


Create table Roles (
Role_ID int primary key,
Role_name varchar(20),
Role_Description varchar(100)
);

Create table Users(
User_ID int primary key auto_increment,
Role_ID int,
foreign key(Role_ID) references Roles(Role_ID),
f_name varchar(50) NOT NULL,
l_name varchar(50) NOT NULL,
Passwords varchar(20) Not Null,
gender varchar(20),
Email varchar(50) NOT NULL,
DOB date,
Phone_number char(10),
Preferences varchar(100)
);

Create table Services(
Service_ID int primary key auto_increment,
User_ID int,
Service_Name varchar(30) NOT NULL,
Service_Description varchar(50),
Duration varchar(30),
Price varchar(50),
foreign key(User_ID) references Users(User_ID) 
);

Create table Staff(
Staff_ID int primary key auto_increment,
Service_ID int,
Staff_name varchar(30) Not Null,
Availability varchar(200),
foreign key(Service_ID) references Services(Service_ID)
);

Create table Availability(
Availability_ID int primary key auto_increment,
Staff_ID int,
set_Date date,
Start_time varchar(10),
End_time varchar(10),
isAvailable boolean,
foreign key(Staff_ID) references Staff(Staff_ID)
);

Create table Appointment(
Appointment_ID int primary key auto_increment,
Service_ID int,
Staff_ID int,
User_ID int,
Appointment_date date,
Start_time int,
End_time int,
foreign key(Service_ID) references Services(Service_ID),
foreign key(Staff_ID) references Staff(Staff_ID),
foreign key(User_ID) references Users(User_ID)
);

Create table Payment(
Payment_ID int primary key auto_increment,
Appointment_ID int,
User_ID int,
Amount float,
Payment_method varchar(50),
foreign key(Appointment_ID) references Appointment(Appointment_ID),
foreign key(User_ID) references Users(User_ID)
);

Create table Feedback (
Feedback_ID int primary key auto_increment,
Service_ID int,
Staff_ID int,
User_ID int,
Rating float,
Review varchar(300),
foreign key(Service_ID) references Services(Service_ID),
foreign key(Staff_ID) references Staff(Staff_ID),
foreign key(User_ID) references Users(User_ID)
);

Create table WaitingList (
WaitingList_ID int primary key auto_increment,
Service_ID int,
User_ID int,
Prefered_date date,
Appointment_Status varchar(20),
foreign key(Service_ID) references Services(Service_ID),
foreign key(User_ID) references Users(User_ID)
);

Insert into Users(f_name, l_name, Passwords, Email, gender, DOB, Phone_number, Preferences)
Values();

Insert into Roles(Role_ID, Role_name)
VALUES(1, 'admin'),
(2, 'standard');

Insert into Services(Service_Name, Service_Description, Duration, Price)
Values('Swedish Massage', 'A relaxing massage technique that uses long strokes and kneading to improve circulation and promote relaxation.', '60 minutes', '$80'),
('Deep Tissue Massage', 'A therapeutic massage focusing on deeper layers of muscles to relieve chronic pain and tension.', '90 minutes', '$120'),
('Hot Stone Massage', 'A soothing massage using heated stones to relax muscles and improve overall well-being.', '75 minutes', '$100'),
('Facial Treatment', 'Our facial treatments are designed to rejuvenate your skin, leaving it glowing and refreshed.', '60 minutes', '$80'),
('Waxing', 'Our sugar waxes leave your body smooth and relaxed.', '60 minutes', '$80'),
('Body Wraps', 'Indulge in our luxurious body wraps that detoxify, exfoliate and hydrate your skin.', '60 minutes', '$100'),
('Natural Hair Treatment', '', '60 minutes', '$50'),
('Manicure and Pedicure', '', '120 minutes', '$80'),
('Braiding', 'short', '2 hours', '$80'),
('Braiding', 'long', '3 hours', '$100'),
('Installations', 'Sew-ins, Wigs and Ponytails', '60 minutes', '$60');

Insert into Staff(Staff_name, Availability)
Values('Mary Ansah', 'Mondays - Wednesdays: 9am - 2pm'),
('Abigail Nunepkeku', 'Mondays - Wednesdays: 9am - 2pm'),
('Iris Boakye', 'Mondays - Wednesdays: 9am - 2pm'),
('Nana Ama Asante', 'Mondays - Wednesdays: 9am - 2pm'),
('Vivian Nkrumah', 'Mondays - Wednesdays: 9am - 2pm'),
('Vanesah Antwi', 'Mondays - Wednesdays: 2pm - 7pm'),
('Kweku Botwe', 'Mondays - Wednesdays: 2pm -7pm'),
('Ohemaa Akroma', 'Mondays - Wednesdays: 2pm -7pm'),
('Phillip Akwei', 'Mondays - Wednesdays: 2pm -7pm'),
('Abena Kyei', 'Mondays - Wednesdays: 2pm -7pm');

Insert into Availability(set_Date, Start_time, End_time, isAvailable)
Values();

Insert into Appointment(Appointment_date, Start_time, End_time)
Values();

Insert into Payment(Amount, Payment_method)
Values();

Insert into Feedback(Rating, Review)
Values();

Insert into WaitingList(Prefered_date, Appointment_Status)
Values();

Select * from Roles;
Select * from Services;
Select * from Staff;