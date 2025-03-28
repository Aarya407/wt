
# Import libraries
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
import numpy as np

# Step 1: Create the position_salaries dataset
data = {
    "Position": ["Junior", "Senior", "Lead", "Manager", "Director"],
    "Level": [1, 2, 3, 4, 5],  # Independent variable
    "Salary": [30000, 50000, 80000, 110000, 150000]  # Target variable
}

df = pd.DataFrame(data)

# Step 2: Identify independent and target variables
X = df[["Level"]]  # Independent variable
y = df["Salary"]  # Target variable

# Step 3: Split data into training and testing sets (70:30 ratio)
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

# Step 4: Build a Simple Linear Regression model
model = LinearRegression()
model.fit(X_train, y_train)

# Step 5: Print results
print("Training Set:")
print(X_train)
print("\nTesting Set:")
print(X_test)

# Step 6: Model coefficients
print("\nModel Coefficient (Slope):", model.coef_[0])
print("Model Intercept:", model.intercept_)

