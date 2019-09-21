#include <stdio.h>

int main(){

    int count_handshake(int angka){
        int a = angka;
        int b = 0;

        while(a != 0){
            a--;
            int c = b + a;
            b = c;
        }

        return b;
    }

    printf("result: %i\n", count_handshake(3));
    printf("result: %i\n", count_handshake(6));

    return 0;
}
