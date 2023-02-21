## eviltwin-portals

get wifi password using Android captive portals

### Requirements

* android

* termux

* root - required for redirecting requests with iptables

### Setup

Install packages

`pkg install php tsu`

Turn on hotspot

Set security to None

Rename hotspot as desired

`cd eviltwin-portals`

Run redirect.sh as root

`su`
`bash redirect.sh`
`exit` exit from root

### Running web server

`cd simple`

`php -S 0.0.0.0:8080`



### Notes


Hotspot fails to trigger "Tap here to sign in to network" without internet; Turning on Mobile data without load worked for me

Captive portal does not gracefully exit or authorizes user for internet connection since /generate_204 with http header 204 does not exist. Resources: [android-captive-portal](https://github.com/leoleozhu/android-captive-portal)

### TODO

Close captive portal after authentication
Clean up redirect.sh rules
Redo with proper web server

### Acknowledgments

Project forked from [fake-captive-portal-using-android-phone](https://github.com/zahichemaly/fake-captive-portal-using-android-phone)
