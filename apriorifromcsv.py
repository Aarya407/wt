
# Import necessary libraries
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules
import pandas as pd

# **Step 1: Read the dataset from a CSV file named 'Market_Basket_Optimisation.csv'**
df = pd.read_csv('Market_Basket_Optimisation.csv', header=None)

# **Step 2: Drop rows with any null values**
df.dropna(inplace=True)

# **Step 3: Convert categorical values into a numeric format using one-hot encoding**
te = TransactionEncoder()
te_ary = te.fit_transform(df.values)
df = pd.DataFrame(te_ary, columns=te.columns_)

# **Step 4: Generate frequent itemsets using the Apriori algorithm with a minimum support of 0.01**
frequent_itemsets = apriori(df, min_support=0.01, use_colnames=True)

# **Step 5: Generate association rules from the frequent itemsets with a minimum lift of 1**
rules = association_rules(frequent_itemsets, metric="lift", min_threshold=1)

# **Step 6: Display information about the original dataset (first 5 rows)**
print("Original Dataset (First 5 Rows):\n")
print(df.head())

# **Step 7: Display the generated frequent itemsets**
print("\nFrequent Itemsets:\n")
print(frequent_itemsets)

# **Step 8: Display the generated association rules**
print("\nAssociation Rules:\n")
print(rules)
