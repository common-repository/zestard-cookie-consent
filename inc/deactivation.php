<?php

/* Deactivation */
    function ZTPL_Deactivate(){
        // flush rewrite rules
        flush_rewrite_rules();
    }