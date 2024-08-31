DROP DATABASE IF EXISTS `Picknmix`;

CREATE DATABASE `Picknmix`;

USE `Picknmix`;

CREATE TABLE `SignUp`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `FirstName` VARCHAR(250) NOT NULL,
    `LastName` VARCHAR(250) NOT NULL,
    `Email` VARCHAR(250) NOT NULL,
    `Address` VARCHAR(250) NOT NULL,
    `MobileNumber` VARCHAR(250) NOT NULL,
    `Pincode` VARCHAR(250) NOT NULL,
    `SetUsername` VARCHAR(250) NOT NULL,
    `SetPassword` VARCHAR(250) NOT NULL,
    `ConfirmPassword` VARCHAR(250) Not NULL
);

CREATE TABLE `Login`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Username` VARCHAR(250) NOT NULL,
    `Password` VARCHAR(250) NOT NULL
);

CREATE TABLE `Role`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Rolename` VARCHAR(250) NOT NULL
);

CREATE TABLE `User`(
    `Id`  INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(250) NOT NULL,
    `RoleId` VARCHAR(250) NOT NULL,
    `MobileNumber` VARCHAR(250) NOt NULL,
    `Email` VARCHAR(250) NOT NULL,
    `Address` VARCHAR(250) NOT NULL,
    `City` VARCHAR(250) NOT NULL,
    `State` VARCHAR(250) NOT NULL,
    `Username` VARCHAR(250) NOT NULL,
    `Password` VARCHAR(250) NOT NULL,
    `Image` VARCHAR(250) NOT NULL
);

CREATE TABLE `Category`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `CategoryName` VARCHAR(250) NOT NULL    
);

CREATE TABLE `Product`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(250) NOT NULL,
    `CategoryId` INT NOT NULL,
    `Description` VARCHAR(250) NOT NULL,
    `Price` DECIMAL NOT NULL,
    `Image` VARCHAR(250) NOT NULL,
    FOREIGN KEY (`CategoryId`) REFERENCES `Category` (`Id`)
);

CREATE TABLE `Cart`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `ProductId` INT NOT NULL,
    `Quantity` VARCHAR(250) NOT NULL,
    FOREIGN KEY (`ProductId`) REFERENCES `Product` (`Id`)
);

CREATE TABLE `Checkout`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `CartId` INT NOT NULL,
    `UserId` INT NOT NULL,
    `Address` VARCHAR(250) NOT NULL,
    `City` VARCHAR(250) NOT NULL,
    `Country` VARCHAR(250) NOT NULL,
    `ZipCode` VARCHAR(250) NOT NULL,
    `TotalAmount` DECIMAL NOT NULL,
    FOREIGN KEY (`CartId`) REFERENCES `Cart` (`Id`),
    FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`Id`)
);

CREATE TABLE `Order`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `UserId` INT NOT NULL,
    `OrderDate` DATETIME NOT NULL,
    `TotalAmount` DECIMAL NOT NULL,
    FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`Id`)
);

CREATE TABLE `OrderDetails`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `OrderId` INT NOT NULL,
    `CheckoutId` INT NOT NULL,
    `Quantity` VARCHAR(250) NOT NULL,
    `ProductPrice` DECIMAL NOT NULL,
    `TotalPrice` DECIMAL NOT NULL,
    FOREIGN KEY (`OrderId`) REFERENCES `Order` (`Id`),
    FOREIGN KEY (`CheckoutId`) REFERENCES `Checkout` (`Id`)
);

CREATE TABLE `OrderHistory`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `OrderId` INT NOT NULL,
    `OrderDate` DATETIME NOT NULL,
    `Price` DECIMAL NOT NULL,
    FOREIGN KEY (`OrderId`) REFERENCES `OrderDetails` (`Id`)
);

CREATE TABLE `Review`
(
  `Id` INT PRIMARY KEY AUTO_INCREMENT,
  `OrderId` INT NOT NULL,
  `UserId` INT NOT NULL ,
  `Review` VARCHAR(250),
  FOREIGN KEY (`OrderId`) REFERENCES `OrderDetails` (`Id`),
  FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`Id`)  
);

CREATE TABLE `ContactUs`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `UserId` INT NOT NULL,
    `Message` VARCHAR(250) NOT NULL,
    FOREIGN KEY (`UserId`) REFERENCES `UserDetails` (`Id`)
);

