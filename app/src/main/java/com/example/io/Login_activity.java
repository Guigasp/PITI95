package com.example.io;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class Login_activity extends AppCompatActivity {
    private EditText textusu;
    private EditText textsenha;
    private Button btnEntrar;
    private Button btnSair;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_activity_layout);
        textusu = (EditText) findViewById(R.id.textusu);
        textsenha = (EditText) findViewById(R.id.textsenha);
        btnEntrar = (Button) findViewById(R.id.btnEntrar);
        btnSair = (Button) findViewById(R.id.btnSair);



        btnEntrar.setOnClickListener((View) -> {
            startActivity(new Intent(Login_activity.this, MainActivity.class));
        });


        btnSair.setOnClickListener((View) -> {
            startActivity(new Intent(Login_activity.this, Cadastro_Activity.class));
        });

    }

    
}