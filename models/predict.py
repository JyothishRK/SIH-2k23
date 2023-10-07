#!usr/bin/env python3.8
import numpy as np
import joblib
import sys
import json

def predict(input_data):
    try:
        # Load the model and scaler
        model = joblib.load('difficulty_prediction_model.pkl')
        scaler = joblib.load('min_max_scaler.pkl')

        # Convert the input data from a JSON string to a Python list
        input_data = json.loads(input_data)

        # Convert the input data to a numpy array
        input_data = np.array([input_data])

        # Scale the input data using the loaded scaler
        scaled_input = scaler.transform(input_data)

        # Predict using the loaded model
        predicted_norm_score = model.predict(scaled_input)

        # Return the prediction as a JSON object
        return json.dumps({'predicted_norm_score': predicted_norm_score[0]})
    except Exception as e:
        # Print the exception message to stderr
        print(str(e), file=sys.stderr)
        sys.exit(1)

if __name__ == "__main__":
    # Retrieve the input data from the command line
    input_data = sys.argv[1]

    # Predict using the input data
    prediction_result = predict(input_data)

    # Print the prediction result
    print(prediction_result)
