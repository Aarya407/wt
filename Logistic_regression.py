
# Import necessary libraries
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression

# Step 1: Create the dataset
data = {
    'UserID': [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    'Gender': ['Male', 'Male', 'Female', 'Female', 'Male', 'Male', 'Female', 'Female', 'Male', 'Female'],
    'Age': [11, 12, 14, 16, 18, 19, 20, 21, 22, 23],
    'EstimatedSalary': [19000, 20000, 43000, 57000, 76000, 58000, 82000, 32000, 69000, 65000],
    'Purchased': [1, 1, 1, 1, 1, 1, 1, 0, 0, 0]
}

df = pd.DataFrame(data)

# Step 2: Define independent (X) and dependent (Y) variables
X = df.iloc[:, 1:4].values  # Columns: Gender, Age, EstimatedSalary
Y = df.iloc[:, 4].values  # Column: Purchased

# Step 3: Split the dataset into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.3, random_state=0)

# Step 4: Build the logistic regression model
lr = LogisticRegression(random_state=0)
lr.fit(X_train, y_train)

# Step 5: Predict for a single observation
observation = [[19, 30000]]  # Example Age and EstimatedSalary
prediction = lr.predict(observation)
print("Prediction for single observation:", prediction)

# Step 6: Predict for multiple observations
observations = [[19, 30000], [20, 40000], [21, 45000]]  # Multiple observations
predictions = lr.predict(observations)
print("Predictions for multiple observations:", predictions)
