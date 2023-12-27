<?php
    class crud{
        public static function conect()
        {
            try{
        $con=new PDO('mysql:localhost=host; dbname=crudsystem','root','');
        return $con;
        } catch (PDOException $error1) {
            echo 'Something went wrong'.$error1->getMessage();
    }catch (Exception $error2){
        echo'Generic error'.$error2->getMessage();
    }
}
}
        
        
?>