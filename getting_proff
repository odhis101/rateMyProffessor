from bs4 import BeautifulSoup
import requests 
# here we will get data from the usiu website 
url ='https://www.usiu.ac.ke/faculty/?schl=chandaria-school'
result = requests.get(url)
doc = BeautifulSoup(result.text, 'html.parser')
prices = doc.find_all("div", class_="block")
print (prices.attrs)
