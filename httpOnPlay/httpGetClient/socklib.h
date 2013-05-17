#ifndef SOCK_LIB_HEADER
#define SOCK_LIB_HEADER

int make_server_socket_q(int , int );
int make_server_socket(int);
int connect_to_server(char *host, int portnum);

#endif
