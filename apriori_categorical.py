import pandas as pd
from mlxtend.frequent_patterns import apriori, association_rules

# Create dataset
data = {'Company': ['Tata', 'MG', 'Kia', 'Hyundai'],
        'Model': ['Nexon', 'Astor', 'Seltos', 'Creta']}

# Convert to DataFrame
df = pd.DataFrame(data)

# Convert categorical values to numeric
df['Company'] = pd.Categorical(df['Company']).codes
df['Model'] = pd.Categorical(df['Model']).codes

# Generate frequent itemsets
frequent_itemsets = apriori(df, min_support=0.5, use_colnames=True)

# Generate association rules
association_rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.7)

# Print results
print(frequent_itemsets)
print(association_rules)
