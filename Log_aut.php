abstract class User {
         public login;
         public is-online;
         private password;
         public email;
         public status;
public function get Profile ( login ) {

}
if ( this - status = = `banned` ) {
   return;
}
public function comment ( post ) {

}
public function edit Profile ( login ) { 
       if ( login != this login ) {
    }
}
abstract protected function isEditAllowed ( login );
public function edit Profile ( login ) {
       if ( ! this , is EditAllowed ) {
           return;
        }
     }
public login ( login , password ) {

     }
public logaut ( ) {

     }
public function register ( data . array ) {

     }
}
class Guest extends User {
      protected function isEditAllowed ( login ) {
           if ( this login != login ) {
               return false;
            } else {
               return true;
          }
     }
}
class Admin extends User {
      protected function isEditAllowed ( login ) {
            return true;
      }
public function addUser ( login , password , email ) {

}
public function deleteUser ( login ) {

}
public function addPost ( data ) {

}
public function editPost ( post id , data ) {

}
public function DeletePost ( post id ) {

}
