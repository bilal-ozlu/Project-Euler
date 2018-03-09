#include <stdio.h>
int main(){

   int n[ 10000 ];
   n[0]=0;
   n[1]=0;
   int i,j,k,a,b;
for ( i = 2; i < 10000; i++) {
  k=0;
  for (j = 1; j < i/2+1 ; j++) {
    if (i%j==0){
      k+=j;
    }
  }
   n[i] = k;
}
  int result=0;
for (a = 2; a < 10000; a++) {
  for (b = 1; b < a ; b++) {
    if  (n[a]==b && n[b]==a){
      result+=(a+b);
    }
  }
}
printf("%d \n",result );
}
