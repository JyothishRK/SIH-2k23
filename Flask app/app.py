from flask import Flask, request, jsonify
import pickle
from pickle import load
import pandas as pd
import numpy as np
import os
import subprocess

model = load(open('difficulty_prediction_model.pkl', 'rb'))
scaler = load(open('min_max_scaler.pkl', 'rb'))

app = Flask(__name__)

@app.route('/endpoints', methods=['POST'])
def initiate_proctoring():
    var=request.form.get('status')

    if var == '1':
        script_directory = r'Intelligent-Online-Exam-Proctoring-System/Code'
        os.chdir(script_directory)

        # Run the script using Python
        script_name = 'online_proctoring_system.py'
        subprocess.run(['python', script_name])
        # return var

    elif var == '0':
        # Terminate the script by sending Ctrl+C signal
        subprocess.run(['taskkill', '/F', '/T', '/PID', str(os.getpid())])
        # return var

@app.route('/endpoint', methods=['POST'])
def handle_post_request():
    # Retrieve POST data from PHP
    malp = request.form.get('Malpractice_score')
    diff = request.form.get('Difficulty')
    time_spent = request.form.get('Time_Spent')
    res = request.form.get('Result')

    user_input = {
    'diff': float(diff),
    'mal': float(malp),
    'time': float(time_spent),
    'res': int(res)
    }

    user_input_df = pd.DataFrame([user_input])

    # Scale the features for the user input
    user_input_df[['diff_scaled', 'mal_scaled']] = scaler.transform(user_input_df[['diff', 'mal']])
    user_input_df['time_scaled'] = user_input_df['time'] / 100.0

    # Extract the features for prediction
    features_for_prediction = user_input_df[['diff_scaled', 'mal_scaled', 'time_scaled', 'res']]

    # Predict using the trained Random Forest Regressor
    predicted_norm_score = model.predict(features_for_prediction)

    print(predicted_norm_score[0])

    return jsonify({'predicted_norm_score': predicted_norm_score[0]})
    # return predicted_norm_score[0]

if __name__ == '__main__':
    app.run(debug=True)  
