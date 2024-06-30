#Asks user for Longitude and Latitude for their location
longitude = input('What is your longitude')
latitude = input('What is your latitude')

#Merges the given location into Url form, then recieves the data from said URL
import urllib.request, json
url = "https://api.weather.gov/points/" + longitude + "," + latitude
response = urllib.request.urlopen(url)

#response = urllib.request.urlopen("https://api.weather.gov/points/38.8894,-77.0352") for testing
data = json.loads(response.read())


#Reads the data from the URL, Skims the json file for the Forcast information to recieve
forecastURL = data['properties']['forecast']
forecastResponse = urllib.request.urlopen(forecastURL)
forecastData = json.loads(forecastResponse.read())

#writes the forcast information to a .json file
with open('forcastInfo.json', "w") as f:
    json.dump(forecastData, f)
f.close()