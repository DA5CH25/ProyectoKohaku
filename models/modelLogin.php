<?php

    if($petitionAjax){
        require_once "../config/mainModel.php";
    }else{
        // si la eticion ajax es fale aceder a la configuración DB
        require_once "./config/mainmodel.php";
    }
    class modelLogin extends mainModel{
        protected function star_model_session($data){
            $sql=mainModel::connect()->prepare("SELECT * FROM usuario WHERE correo_electronico=:email AND clave=:pass AND estado_usuario_id_estado_usuario=1");
            $sql->bindParam(':email',$data['email']);
            $sql->bindParam(':pass',$data['pass']);
            $sql->excute();
            return $sql;
        }
    }