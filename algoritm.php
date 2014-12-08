<?php
get ( L );
get ( p );
get ( q );
get ( x );
get ( year );
   while ( k < x ) {
      if ( year % 2 ) {
         k = L * p;
       } else {
         k = L * q;
      }
     L = L + k;
     year ++;
   }
pritn ( year );  
