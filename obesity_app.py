import pandas as pd
import joblib
from flask import Flask, request
import json

app = Flask(__name__)

@app.route("/obesity/prediction/", methods=["POST"])
def prediction_result():
    model = joblib.load('random_forest_model-0.1.0.pkl')
    data = request.get_json()

    #gender = int(data['Gender'])
    age = int(data['age'])
    height = int(data['height'])
    weight = int(data['weight'])
    family_history_with_overweight = int(data['family_history_with_overweight'])
    FAVC = int(data['FAVC'])
    FCVC = int(data['FCVC'])
    NCP = int(data['NCP'])
    CAEC = int(data['CAEC'])
    SMOKE = int(data['SMOKE'])
    CH2O = int(data['CH2O'])
    SCC = int(data['SCC'])
    FAF = int(data['FAF'])
    TUE = int(data['TUE'])
    CALC = int(data['CALC'])
    MTRANS = int(data['MTRANS'])

    input_data = [[age, height, weight, family_history_with_overweight, FAVC, FCVC, NCP, CAEC, SMOKE, CH2O, SCC, FAF, TUE, CALC, MTRANS]]
    X = pd.DataFrame(input_data, columns=['age', 'height', 'weight', 'family_history_with_overweight', 'FAVC', 'FCVC', 'NCP', 'CAEC', 'SMOKE', 'CH2O', 'SCC', 'FAF', 'TUE', 'CALC', 'MTRANS'])

    result = model.predict(X)

    labels = ['Insufficient_Weight', 'Normal_Weight', 'Overweight_Level_I', 'Overweight_Level_II', 'Obesity_Type_I', 'Obesity_Type_II', 'Obesity_Type_III']
    decision = labels[int(result[0])]

    dictionary = {"status": "success", "prediction": decision}
    jsonDataOutput = json.dumps(dictionary)

    return jsonDataOutput

if __name__ == "__main__":
    app.run()
