## Elevator exercise: Week 1
Using what you've learned about `if` and `if else`, create a project that will determine if the elevator will stop for the person waiting. Create a php program that will output a specific message based on the direction the elevator is going, the direction the person is going, the floor the person is on, and the floor the elevator is on. 

### Step 1: create your variables
You will have four variables in this exercise: 
- direction of the person
- direction of the elevator
- floor of the person
- floor of the elevator

### Step 2: know the different scenarios
Will the elevator pick me up?

- The elevator and the person are not going the same direction
	- message: "No, it's going the wrong way."

- The elevator and the person are going the same direction, but the elevator has passed the person
	- message: "No, it's already passed."

- The elevator and the person are going the same direction, and the elevator has not yet passed
	- message: "Yes, pick me up."

- The elevator and the person are going the same direction and are on the same floor
	- message: "Yes, pick me up."

### Hints

- Do not use `&&` in your `if-statements`.
- Test your code after finishing each `if-statement`.