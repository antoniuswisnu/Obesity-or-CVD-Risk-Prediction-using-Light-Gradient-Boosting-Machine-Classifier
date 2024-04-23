from flask import Flask, render_template, request
import joblib
import warnings
import pickle
warnings.filterwarnings('ignore')

app = Flask(__name__)

model = joblib.load("logistic_regression_model-0.1.0.pkl")

@app.route('/predict', methods=['POST'])
def predict():
    if request.method == 'POST':
        Age = int(request.form['Age'])
        Height = float(request.form['Height'])
        Weight = float(request.form['Weight'])
        family_history_with_overweight = int(request.form['family_history_with_overweight'])
        FAVC = int(request.form['FAVC'])
        FCVC = float(request.form['FCVC'])
        NCP = int(request.form['NCP'])
        CAEC = int(request.form['CAEC'])
        SMOKE = int(request.form['SMOKE'])
        CH2O = float(request.form['CH2O'])
        SCC = int(request.form['SCC'])
        FAF = float(request.form['FAF'])
        TUE = float(request.form['TUE'])
        CALC = int(request.form['CALC'])

        prediction = model.predict([[Age, Height, Weight, family_history_with_overweight, FAVC, FCVC, NCP, CAEC, SMOKE, CH2O, SCC, FAF, TUE, CALC]])

        result = "Obesitas" if prediction[0] == 1 else "Tidak Obesitas"

        return render_template('index.html', prediction_text='Hasil Prediksi: {}'.format(result))

if __name__ == "__main__":
    app.run()

