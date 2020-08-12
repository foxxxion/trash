curl -i -s -k -X $'GET' \
    -H $'Host: 172.17.0.2' -H $'User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:68.0) Gecko/20100101 Firefox/68.0' -H $'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8' -H $'Accept-Language: en-US,en;q=0.5' -H $'Accept-Encoding: gzip, deflate' -H $'Referer: https://172.17.0.2/index.html?username=FLAG%7B%7D&password=Elementary_my_dear_Watson' -H $'Connection: close' -H $'Cookie: heartbleed' -H $'Upgrade-Insecure-Requests: 1' \
    $'https://172.17.0.2/index.html?username=FLAG%7B%7D&password=Elementary_my_dear_Watson'
    
    
