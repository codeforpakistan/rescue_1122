package com.example.gisplus.rescue1122;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class Accept extends AppCompatActivity {

    TextView info;
    Button button4;
    Button button3;
    String data;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_accept);

        info = (TextView) findViewById(R.id.info);
        button4 = (Button) findViewById(R.id.button4);
        button3 = (Button) findViewById(R.id.button3);

        Bundle b = new Bundle();
        b = getIntent().getExtras();
        data = b.getString("mess");

        info.setText(data+" Emergency Are You Available to go?");


        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(Accept.this,toLocation.class);
                startActivity(i);
            }
        });

        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(Accept.this,start.class);

                startActivity(i);
            }
        });

    }
}
