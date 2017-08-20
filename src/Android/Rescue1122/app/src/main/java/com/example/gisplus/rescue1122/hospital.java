package com.example.gisplus.rescue1122;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.widget.Button;

public class hospital extends AppCompatActivity {

    WebView hos;
    Button button24;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_hospital);

        hos = (WebView) findViewById(R.id.hos);

        button24 = (Button) findViewById(R.id.button24);



        hos.loadUrl("http://clickworld.pk/moving/examples/index2.html");
        WebSettings webSettings = hos.getSettings();
        webSettings.setJavaScriptEnabled(true);

        button24.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(hospital.this,MainActivityform.class);
                startActivity(i);
            }
        });



    }
}
