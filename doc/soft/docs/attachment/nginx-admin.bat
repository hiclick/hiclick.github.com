echo off
set nginx_home=c:\nginx-1.6.3
cd %nginx_home%
tasklist | findstr /i "nginx.exe"

if %ERRORLEVEL% == 0 (
	goto :stop_nginx
	goto :start_nginx
	goto :eof
) else (
	goto :start_nginx
	goto :eof
)

:stop_nginx
	echo "nginx is running, stopping..."
	rem nginx -s stop
	TASKKILL /F /IM nginx.exe /T
	echo "stop ok"

:start_nginx
	echo "nginx is not running, starting"
	start "" nginx.exe
	echo "start ok"