<?php
    class ViewUser {
        private $user;

        public function __construct($user) {
            $this->user = $user;
        }

        public function render() {
            return "<div><p>Bienvenue, " . $this->user['nom'] . "</p></div>";
        }
    }
?>