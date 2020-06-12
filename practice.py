import time

ans=0
print("\nWELCOME TO THE IEEE TECHNOPOLY QUESTIONNAIRE")
print("\n\nHere, you can win 5000 IEEE bucks by answering 10 very simple questions.\nEach question is worth Rs250 and each minute is worth Rs250.\nAs every minute passes you lose Rs250 from your total.\n\n")
print("The first question appears in 15 seconds..\n\n")
time.sleep(15)
start = time.time()
print("To begin with, why was BASIC called BASIC? ( It was one of the first programming languages )")
print("\n1.It had an easy syntax")
print("\n2.It had an easy programmable logic")
print("\n3.It was written in assembly lanugage")
print("\n4.It was an acronym")
print("\nPlease enter your answer in single digit")
x=input()
if x == "4":
	ans=ans+1

end = time.time()
timetaken = end-start
print("\n\nYou have reached the end of the questionare and taken ",int(timetaken/60)," minutes\n")
time.sleep(5)
cash= 5000+(ans*250)
timecash= (10-(int(timetaken/60)))*250
cash = cash+timecash
print("You bagged",cash," IEEE bucks. Time to work put your ideas to the test! :) \n\n")    