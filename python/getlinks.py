import urllib2 as url
from urllib import *
link_to_webcrawler-links = "http://127.0.0.1/webcrawer-links.php"

site = raw_input("site (without http://): ")
data = {}
data['site'] = site
data = urlencode(data)
links = url.urlopen(link_to_webcrawler-links+"?"+data)
links = links.read()
links = links.split("<br />")
for link in links:
    print link
