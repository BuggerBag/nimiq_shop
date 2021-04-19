<?php
    
    // mysql db login details
    DB::$user = 'root';
    DB::$password = '';
    DB::$dbName = 'nimipay';

    // NIM address that receives payments
    $nim_address = "Wallet address";

    // get your free API key at https://nimiqx.com
    $nimiqx_api_key = "Secret API key";

    $nimiqx_txs = "https://api.nimiqx.com/account-transactions/".$nim_address."?api_key=".$nimiqx_api_key;


?>