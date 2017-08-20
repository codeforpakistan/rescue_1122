package com.example.gisplus.rescue1122;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.widget.Button;

public class toLocation extends AppCompatActivity {

        WebView moving;
    Button button6;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_to_location);
        moving = (WebView) findViewById(R.id.moving);

        button6 = (Button) findViewById(R.id.button6);

        moving.loadUrl("http://clickworld.pk/moving/examples/index.html");
        WebSettings webSettings = moving.getSettings();
        webSettings.setJavaScriptEnabled(true);

        button6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(toLocation.this,hospital.class);
                startActivity(i);
            }
        });
    }


}
