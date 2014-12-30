# Student Project Guidelines

For projects in the second half of the bootcamp, we'll ask you to use the MVC code provided to you to complete your project. The MVC code comes with lots of features built in to help you understand what the role of MVC is, but it is also lacking lots of tools that we would like you to build for yourself. This document will describe which tools you will need to build and any other requirements that we have for these projects:

## Business Requirements
1. Your project must have a concept of users and user accounts.
 1. You will need to implement features that require users to login in order to use these features
1. You must implement a full CRUD paradigm on at least one of your major entities
1. Your application must implement the following best practices
 1. Output escaping (XSS protection)
 1. Input validation (client-side and server-side)
 1. Code must be organized into Classes and Objects when necessary to create DRY code over procedural style code
 1. Your application must use AJAX in some form in addition to any third-party AJAX which you might be using

## Business Rules & Database Schema

Write your business rules down for review. Be sure to encapsulate all major situations you plan to program for and also plan use-cases for normal workflow and abnormal workflow.

Once you've determined your business rules, create a database schema which incorporates all your business rules.

## Page Flow Diagram

Build a page flow diagram to document the layout/organization of the major pages of your website.

## Create Wireframe

Create wireframes for all of your pages. Show the interactions.

## Design

Find a visual design online that you want to emulate for your project. [Dribbble](https://dribbble.com/tags/web) might be a good source for ideas. Build HTML files for your major pages and build the structure aspect of your design first. Follow the structure design with necessary aesthetics design.

## Class ideas
Currently the MVC code has no built-in tools/classes to handle the following needs. You will need to build your own classes to accomplish these needs:

### Repeating Templates
- A templating system that allows you to loop over data and built up HTML fragments for output

### Login Helper
- A class that manages your user's login state. Use sessions.

### Validator
- A class that validates various types of data

### Output Escaper
- A class that handles output escaping including XSS protection

### MySQL
- Use prepared statements when calling database
- Create a file to create you database schema and data in schema.sql
