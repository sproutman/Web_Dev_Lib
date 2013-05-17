#include    <stdio.h>
#include    <stdlib.h>
#include	<unistd.h>
#include	<sys/types.h>
#include	<sys/socket.h>
#include	<netinet/in.h>
#include	<netdb.h>
#include	<time.h>
#include	<strings.h>
#include	<string.h>
#include    <errno.h>

#include "socklib.h"
int main()
{
	char sendline[4096] = "GET / HTTP/1.1\r\nHost:www.baidu.com\r\nConnection:keep-alive\r\n\r\n";
	char* host="115.239.210.26";
	int portnum = 80;
	int retV;
	retV = connect_to_server(host,portnum);
	printf("connect_to_server return value is = %d \n", retV);

//	send();
    if( send(retV, sendline, strlen(sendline), 0) < 0)
    {
    printf("send msg error: %s(errno: %d)\n", strerror(errno), errno);
    exit(0);
    }


//	sleep(3);

//	recv();

	printf("recv process !!! \n");
	int n;
	int MAXLINE = 4096;
	char buff[4096];
    n = recv(retV, buff, MAXLINE, 0);
    buff[n] = '\0';

    /*Output 1,print on screen*/
//    printf("recv msg from client: %s\n", buff);


    /*Output 2,print on file*/
    FILE* fp;
    if((fp=fopen("/root/baidu.html","wb+"))==NULL)
     {
       printf("Cannot open file!\n");
       exit(1);
     }
    fputs( buff,fp );

	getchar();
	return 0;
}
