<?php
    require("User.php");
    class ListUsers {
        private array $users;
        private int $nbUsers;

        function __construct() {
            $this->users = [];
            $this->nbUsers = 0;
        }

        function &getUsers() {
            return $this->users;
        }

        function &getUser($i) {
            return $this->users[$i];
        }

        function setUser(int $i, User &$u) {
            $this->users[$i] = $u;
        }

        function getNbUsers() {
            return $this->nbUsers;
        }

        // EXERCICE 2
        function createUser(string $t, string $p, string $m, string $pass) {
            /**
             * VOTRE CODE ICI
             * Ajoute un nouvel utilisateur dans la liste
             */
        }

        // EXERCICE 5
        function printUsers() {
            /**
             * VOTRE CODE ICI
             * appelle dans un boucle la fonction printUser
             * sur chacun des "User" dans la liste
             */
        }

        // EXERCICE 6
        function deleteLastUser() {
            /**
             * VOTRE CODE ICI
             * Supprime le dernier utilisateur de la liste
             */
        }


        // EXERCICE 7
        function &findUser(string $pseudo) {
            $reponse = false;
            /**
             * VOTRE CODE ICI
             * Votre fonction doit renvoyer un utilisateur
             * (l'objet de la liste)
             * selon son pseudo
             */
            return $reponse;
        }

        // EXERCICE 8
        function deleteUser(string $pseudo) {
            /**
             * VOTRE CODE ICI
             * Supprime un utilisateur selon son pseudo
             * utilisez "finduser"
             */
        }
        
        // EXERCICE 9
        function getSomeUsers(int $nbr) {
            /**
             * VOTRE CODE ICI
             * Renvoie les "$nbr" derniers User de la liste
             */
        }
    }

?>