package com.example.io;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class Cadastro_Activity extends AppCompatActivity {
    private Button button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro_layout);
        button = (Button) findViewById(R.id.button);

        button.setOnClickListener((View) -> {
            startActivity(new Intent(Cadastro_Activity.this, Login_activity.class));
        });

    }


}